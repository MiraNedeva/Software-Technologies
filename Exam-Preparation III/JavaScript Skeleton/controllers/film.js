const Film = require('../models/Film');

module.exports = {
	index: (req, res) => {
        //TODO: Implement me ...
		Film.find({}).then(films => {
			res.render("film/index", {'films': films});
		});
	},
	createGet: (req, res) => {
        //TODO: Implement me ...
		res.render("film/create");
	},
	createPost: (req, res) => {
        //TODO: Implement me ...
		let filmArguments = req.body;
		Film.create(filmArguments).then(film => {
			res.redirect('/');
		});
	},
	editGet: (req, res) => {
        //TODO: Implement me ...
		let filmId = req.params.id;

		Fim.findById().then(film =>{
			res.render('film/edit',film);
		});
	},
	editPost: (req, res) => {
        //TODO: Implement me ...
	},
	deleteGet: (req, res) => {
        //TODO: Implement me ...
	},
	deletePost: (req, res) => {
        //TODO: Implement me ...
	}
};