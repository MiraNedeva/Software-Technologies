package imdb.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import imdb.bindingModel.FilmBindingModel;
import imdb.entity.Film;
import imdb.repository.FilmRepository;

import java.util.List;

@Controller
public class FilmController {

	private final FilmRepository filmRepository;

	@Autowired
	public FilmController(FilmRepository filmRepository) {
		//TODO: Implement me ...
		this.filmRepository = filmRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		//TODO: Implement me ...
		List<Film>films = this.filmRepository.findAll();

		model.addAttribute("view", "film/index");
		model.addAttribute("films", films);
		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		//TODO: Implement me ...
		model.addAttribute("view", "film/create");

		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, FilmBindingModel filmBindingModel) {
		//TODO: Implement me ...
		if (filmBindingModel == null) {
			return "redirect:/";
		}
		if (filmBindingModel.getName().equals("") || (filmBindingModel.getGenre().equals("")
				|| (filmBindingModel.getDirector().equals("")))) {
			return "redirect:/";
		}
		Film film = new Film(
				filmBindingModel.getName(),
				filmBindingModel.getGenre(),
				filmBindingModel.getDirector(),
				filmBindingModel.getYear());

		filmRepository.saveAndFlush(film);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		//TODO: Implement me ...
		Film film = filmRepository.findOne(id);
		if(film == null){
			return  "redirect:/";
		}
		model.addAttribute("view", "film/edit");
		model.addAttribute("film", film);

		return "base-layout";

	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, FilmBindingModel filmBindingModel) {
		//TODO: Implement me ...
		if (filmBindingModel.getName().equals("") || filmBindingModel.getGenre().equals("") ||
				filmBindingModel.getDirector().equals("")){
			return "redirect:/";
		}

			Film filmEntity = filmRepository.findOne(id);

			if (filmEntity == null){
				return "redirect:/";
			}

			filmEntity.setDirector(filmBindingModel.getDirector());
			filmEntity.setGenre(filmBindingModel.getGenre());
			filmEntity.setName(filmBindingModel.getName());
			filmEntity.setYear(filmBindingModel.getYear());

			filmRepository.saveAndFlush(filmEntity);

			return "redirect:/";

	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		//TODO: Implement me ...
		Film filmEntity = filmRepository.findOne(id);

		if(filmEntity == null){
			return "redirect:/";
		}

		model.addAttribute("view", "film/delete");
		model.addAttribute("film", filmEntity);

		return "base-layout";
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(@PathVariable int id) {
		//TODO: Implement me ...
		Film film = filmRepository.findOne(id);
		if (film == null){
			return  "redirect:/";
		}
		filmRepository.delete(film);
		filmRepository.flush();

		return "redirect:/";

	}
}
