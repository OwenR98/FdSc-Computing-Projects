/**
 * The Book class is a subclass of the Publications class, it contains methods with are unique to a book object.
 * 
 * @Author: Owen Ramsey
 * @Version 1.0
 */

public class Book extends Publication implements ICoverType
{
    private CoverType coverType = CoverType.HARDBACK;

    /**
     * This constructor method allows the user to pass through information which is related to a book object.
     * 
     * @param title             The title of the book.
     * @param releaseDate       The release date of the book.
     * @param author            The author of the book.
     * @param CoverType         The type of cover for the book whether that be hard or softback.
     */
    public Book(String title, String releaseDate, String author, CoverType CoverType)
    {
        this.title = title;
        this.releaseDate = releaseDate;
        this.author = author;
        this.coverType = CoverType;
    }

    /**
     * This method is used to return the title of the book and the method signature is inherited from the Publications superclass.
     * 
     * @see getTitle in Publications.
     * @return The title of the book.
     */
    public String getTitle()
    {
        return title;
    }

    /**
     * This method is used to return the release date of the book and the method signature is inherited from the Publications superclass.
     * 
     * @see getReleasedate in Publications.
     * @return The release date of the book.
     */
    public String getReleaseDate()
    {
        return releaseDate;
    }

    /**
     * This method is used to return the author of the book and the method signature is inherited from the Publications superclass.
     * 
     * @see getAuthor in Publications.
     * @return The author of the book.
     */
    public String getAuthor()
    {
        return author;
    }
    /**
     * This method is used to see what type of coverType the book has wether that be a hardback or softback, and once this is
     * determined it will output a string saying wether it is a hardback or softback. The method implements conditional logic to 
     * determine which one is required.
     * 
     */
    public void getCoverType()
    {
        if (coverType == CoverType.HARDBACK)
        {
            System.out.println("This is a hardback book");
        }
        else if ( coverType == CoverType.SOFTBACK)
        {
            System.out.println("This is a softback book");
        }
        else
        {
            System.out.println("Unknown book cover type");
        }
    }

    /**
     * This method is used so that the user can change the cover type of the book, the method uses conditional logic to 
     * examine the user input to change the cover type of the book.
     * 
     * @param newCoverType Holds the new cover type passed thorugh by the user.
     * @return The cover type for the book.
     */
    public String setCoverType(String newCoverType)
    {
        if ( newCoverType == "Hardback")
        {
            coverType = CoverType.HARDBACK;
        }
        else if ( newCoverType == "Softback")
        {
            coverType = CoverType.SOFTBACK;
        }
        return newCoverType;
    }

}
// End class Book.
