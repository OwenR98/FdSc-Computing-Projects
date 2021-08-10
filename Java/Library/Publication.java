/**
 * The Publications class is a superclass that holds the method signatures and methods that are going
 * to be used by all the subclasses.
 * 
 * @Author: Owen Ramsey
 * @Version 1.0
 */

public abstract class Publication 
{
  protected String title;
  protected String releaseDate;
  protected String author;

  /**
   * This is the method signature for getting the title of the publication.
   * @return  Publication title.
   */
  public abstract String getTitle(); 

  /**
   * This is the method signature for getting the release date of the publication.
   * @return  publication release date.
   */
  public abstract String getReleaseDate();

  /**
   * This is the method signature for getting the author of the publication.
   * @return  publication author.
   */
  public abstract String getAuthor();

  /**
   * This is the method to change the title of a publication.
   * @param newTitle  Holds the new title of the publication.
   * @return The new publication title.
   */
  public String setTitle(String newTitle)
  {
    title = newTitle;
    return newTitle;
  }

  /**
   * This is the method to change the release date of a publication.
   * @param newReleaseDate Holds the new release date of a publication.
   * @return The new release date of a publication.
   */
  public String setReleaseDate(String newReleaseDate)
  {
    releaseDate = newReleaseDate;
    return newReleaseDate;
  }

  /**
   * This is the method to change the author of a publication.
   * @param newAuthor this is the new author of a publication.
   * @return The new author of a publication.
   */
  public String setAuthor(String newAuthor)
  {
    author = newAuthor;
    return newAuthor;
  }
    
}
// End class Publications
