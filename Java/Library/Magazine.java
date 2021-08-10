/**
 * The Magazine class is a subclass of the Publications class, it contains methods with are unique to a Magazine object.
 * 
 * @Author: Owen Ramsey
 * @Version 1.0
 */

public class Magazine extends Publication
{
    /**
     * This constructor method allows the user to pass information about the magazine.
     * 
     * @param title         The title of the magazine.
     * @param releaseDate   The release date of the magazine.
     * @param author        The author of the magazine.
     */
    public Magazine(String title, String releaseDate, String author)
    {
        this.title = title;
        this.releaseDate = releaseDate;
        this.author = author;
    }

    /**
     * This method is used to return the title of the magazine and the method signature is inherited from the Publications superclass.
     * 
     * @see getTitle in Publications.
     * @return The title of the magazine.
     */
    public String getTitle()
    {
        return title;
    }

    /**
     * This method is used to return the release date of the magazine and the method signature is inherited from the Publications superclass.
     * 
     * @see getReleasedate in Publications.
     * @return The release date of the magazine.
     */
    public String getReleaseDate()
    {
        return releaseDate;
    }

    /**
     * This method is used to return the author of the magazine and the method signature is inherited from the Publications superclass.
     * 
     * @see getAuthor in Publications.
     * @return The author of the magazine.
     */
    public String getAuthor()
    {
        return author;
    }

}

// End class Magazine.