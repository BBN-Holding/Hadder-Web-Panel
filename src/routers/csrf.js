const r = require('./../db');
const crypto = require('crypto');

const make = async (req, res, next) => {
	if (req.user && req.user.id) {
		const csrf = crypto.randomBytes(64).toString('hex');
		await r.table('csrf')
			.insert({
				user: req.user.id,
				expiry: Date.now() + 1800000,
				csrf
			}, {
				conflict: 'replace'
			});
		res.locals.csrf = csrf;
	}
	next();
};

const check = async (req, res, next) => {

	await r.table('csrf')
		.filter(r.row('expiry').lt(Date.now()))
		.delete();

	   const results = await r.table('csrf')
		.filter({
			user: req.user.id,
			csrf: req.body.csrf
		})
		.run();

  const result = results[0] || null;

	if (!result) {
		res.status(401).render('error', { status: 401, message: 'The server could not find your CSRF record. Has it expired?' });
	} else {
		await r.table('csrf')
			.get(result.id)
			.delete();
		next();
	}
};

module.exports.make = make;
module.exports.check = check;
