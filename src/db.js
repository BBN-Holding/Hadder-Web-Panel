const r = require('rethinkdbdash')({
  port: 28015,
  host: "127.0.0.1"
});

module.exports = r;
