const Task = require('../models/Task');

module.exports = {
	index: (req, res) => {
		// TODO: Implement me...
	let taskPromises = [
		Task.find({status: "Open"}),
        Task.find({status: "In Progress"}),
        Task.find({status: "Finished"}),
	];
	Promise.all(taskPromises).then(taskResults => {
        res.render('task/index',
            {
                'openTasks': taskResults[0],
                'In ProgressTasks': taskResults[1],
                'finishedTasks': taskResults[2]
            });
    })

	},

	createGet: (req, res) => {
		// TODO: Implement me...
        res.render('task/create');
	},
	createPost: (req, res) => {
        // TODO: Implement me...
        let task = req.body;
        Task.create(task).then(task => {
            res.redirect("/");
            res.render('task/create', task);
        });



	},
	editGet: (req, res) => {
		// TODO: Implement me...
	},
	editPost: (req, res) => {
		// TODO: Implement me...
	}
};