/**
 * The Newspaper class is a subclass of the Publications class, it contains methods with are unique to a Newspaper object.
 * 
 * @Author: Owen Ramsey
 * @Version 1.0
 */

public class Newspaper extends Publication
{
    private String issueNo;
    
    public Newspaper (String title, String releaseDate, String author, String issueNo)
    {
        this.title = title;
        this.releaseDate = releaseDate;
        this.author = author;
        this.issueNo = issueNo;
    }

     /**
     * This method is used to return the title of the newspaper and the method signature is inherited from the Publications superclass.
     * 
     * @see getTitle in Publications.
     * @return The title of the newspaper.
     */
    public String getTitle()
    {
        return title;
    }

    /**
     * This method is used to return the release date of the newspaper and the method signature is inherited from the Publications superclass.
     * 
     * @see getReleasedate in Publications.
     * @return The release date of the newspaper.
     */
    public String getReleaseDate()
    {
        return releaseDate;
    }

    /**
     * This method is used to return the author of the newspaper and the method signature is inherited from the Publications superclass.
     * 
     * @see getAuthor in Publications.
     * @return The author of the newspaper.
     */
    public String getAuthor()
    {
        return author;
    }

    /**
     * This method is used to return the issue number of the newspaper. This method is unique to the Newspaper object.
     * 
     * @return The issue number of the newspaper.
     */
    public String getIssueNo()
    {
        return issueNo;
    }

    /**
     * This method is used to set the new issue number of the newspaper to whatever string is passed through the method.
     * 
     * @param newIssueNo Holds the new issue number of the newspaper.
     */
    public void setIssueNo(String newIssueNo)
    {
        issueNo = newIssueNo;
    }
}
// End class Newspaper.