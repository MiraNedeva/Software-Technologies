package teistermask.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import teistermask.bindingModel.TaskBindingModel;
import teistermask.repository.TaskRepository;

import teistermask.entity.Task;
import java.util.List;
import java.util.stream.Collectors;

@Controller
public class TaskController {
	private final TaskRepository taskRepository;

	@Autowired
	public TaskController(TaskRepository taskRepository) {
		this.taskRepository = taskRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		// TODO: Implement me...
		List<Task>tasks = taskRepository.findAll();

		List<Task>openTasks = tasks.stream().filter(t->t.getStatus().equals("Open")).collect(Collectors.toList());
		List<Task>inProgressTasks = tasks.stream().filter(t->t.getStatus().equals("In Progress")).collect(Collectors.toList());
		List<Task>finishedTasks = tasks.stream().filter(t->t.getStatus().equals("Finished")).collect(Collectors.toList());

		model.addAttribute("openTasks", openTasks);
		model.addAttribute("inProgressTasks", inProgressTasks);
		model.addAttribute("finishedTasks", finishedTasks);
		model.addAttribute("view", "task/index");

		return "base-layout";

	}

	@GetMapping("/create")
	public String create(Model model) {
		// TODO: Implement me...
		model.addAttribute("view", "task/create");

		return "base-layout";

	}

	@PostMapping("/create")
	public String createProcess(Model model, TaskBindingModel taskBindingModel) {
		// TODO: Implement me...
		if (taskBindingModel == null) {
			return "redirect:/";
		}
		if (taskBindingModel.getTitle().equals("") || (taskBindingModel.getStatus().equals(""))) {
			return "redirect:/";
		}
		Task task = new Task(taskBindingModel.getTitle(), taskBindingModel.getStatus());

		taskRepository.saveAndFlush(task);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id,  TaskBindingModel taskBindingModel) {
		// TODO: Implement me...
		Task task = taskRepository.findOne(id);

		if (task == null){
			return  "redirect:/";
		}
		model.addAttribute("view", "task/edit");
		model.addAttribute("task", task);

		return "base-layout";

	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model,@PathVariable int id, TaskBindingModel taskBindingModel) {
		// TODO: Implement me...
		if (taskBindingModel.getTitle().equals("") || taskBindingModel.getStatus().equals("")){

			Task newTaskForForm = new Task();

			newTaskForForm.setTitle(taskBindingModel.getTitle());
			newTaskForForm.setStatus(taskBindingModel.getStatus());
			newTaskForForm.setId(id);

			model.addAttribute("task", newTaskForForm);
			model.addAttribute("view", "task/edit");

			return "redirect:/";
		}

		Task task = taskRepository.findOne(id);

		if (task != null) {
			task.setId(id);
			task.setStatus(taskBindingModel.getStatus());
			task.setTitle(taskBindingModel.getTitle());
			taskRepository.saveAndFlush(task);
		}

		return "redirect:/";
	}
}
