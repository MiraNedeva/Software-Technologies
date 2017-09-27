package teistermask.entity;

import javax.persistence.*;

@Entity
@Table(name = "tasks")
public class Task {
	// TODO: Implement me...
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private String title;
    private String status;

    public Task(){

    }

    public Task(String title, String status) {
        this.title = title;
        this.status = status;
    }

    @Column(nullable = false)
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    @Column(nullable = false)
    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    @Column(nullable = false)
    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        if (status.equals("Open")|| (status.equals("In progress") || (status.equals("Finished")))){
            this.status = status;
        }
        else{
            throw  new IllegalArgumentException("Invalid status: " + status);
        }
    }
}
