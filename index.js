const config = require('config');
const { exec } = require('child_process');
const r = require('rethinkdbdash')({
  port: 28015,
  host: "127.0.0.1"
});

const { tables } = require("./config/default.json");

const verifyDb = async () => {
	const shouldConfigure = !(await r.dbList().contains('Website'));

	if (shouldConfigure) {
		await r.dbCreate("Website");

		const promises = tables.map(table =>
			r.db("Website").tableCreate(table).run()
		);

		await Promise.all(promises);
	}

	r.getPoolMaster().drain();
};
verifyDb();
require('./src/index');
