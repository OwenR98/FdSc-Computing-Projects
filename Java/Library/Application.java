/**
 * The Application class is implemented to run the code from other classes.
 * 
 * @Author: Owen Ramsey
 * @Version 1.0
 */

public class Application 
{
    public static void main(String[] args)
    {
        Tidy.clrScreen();

        // Create a magazine object and display values such as title and author, and then change these values and display them once again.
        Magazine m1 = new Magazine("DemoMag","01/01/2020","Vouge");
        System.out.println("This magazine is called: " + m1.getTitle());
        System.out.println("It was released on: " + m1.getReleaseDate());
        System.out.println("This was released by: " + m1.getAuthor());
        m1.setTitle("DemoMag2");
        m1.setReleaseDate("02/01/2020");
        m1.setAuthor("avon");
        System.out.println("The new title is: " + m1.getTitle());
        System.out.println("The new release date is: " + m1.getReleaseDate());
        System.out.println("The new author is: " + m1.getAuthor());
        System.out.println("----------------------------------------------");

        // Create a Book object and display values such as title and author, and then change these values and display them once again.
        Book b1 = new Book("DemoBook","01/01/2020","Charles Dickens",CoverType.HARDBACK);
        System.out.println("This book is called: " + b1.getTitle());
        System.out.println("It was released on: " + b1.getReleaseDate());
        System.out.println("This was released by: " + b1.getAuthor());
        b1.getCoverType();
        b1.setTitle("DemoBook2");
        b1.setReleaseDate("02/01/2020");
        b1.setAuthor("Michelle Obama");
        b1.setCoverType("Softback");
        System.out.println("The new title is: " + b1.getTitle());
        System.out.println("The new release date is: " + b1.getReleaseDate());
        System.out.println("The new author is: " + b1.getAuthor());
        b1.getCoverType();
        System.out.println("----------------------------------------------");

        // Create a Newspaper object and display values such as title, author and then change these values and display them again.
        Newspaper n1 = new Newspaper("Covid 19 Finally Ends", "01/01/2020", "Dave Smith", "21");
        System.out.println("This newspaper is called: " + n1.getTitle());
        System.out.println("It was released on: " + n1.getReleaseDate());
        System.out.println("This was released by: " + n1.getAuthor());
        System.out.println("The issue number is : " + n1.getIssueNo());
        n1.setTitle("Covid is BACK!");
        n1.setReleaseDate("02/01/2020");
        n1.setAuthor("Derek Smith");
        n1.setIssueNo("90");
        System.out.println("This newspaper is called: " + n1.getTitle());
        System.out.println("It was released on: " + n1.getReleaseDate());
        System.out.println("This was released by: " + n1.getAuthor());
        System.out.println("The issue number is : " + n1.getIssueNo());
        System.out.println("----------------------------------------------");

    }

}
// End class Application.