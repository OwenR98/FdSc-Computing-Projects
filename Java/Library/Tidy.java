/**
 * The Tidy class is used as a utility method class which stores methods used frequently in the application class to allow for code re-use.
 * 
 * @Author Owen Ramsey
 * @Version 1.0
 */

public class Tidy
{
    /**
     * This method is used to clear the terminal window which gives a much cleaner look to display of information.
     */
    public static void clrScreen() 
    {  
        System.out.print("\033[H\033[2J");  
        System.out.flush();  
    }  

    /**
     * This method allows the user to pass through the int 'ms' which is how many milliseconds the user wants the compiler to wait before it continues to read code,
     * This is used to create a slower display of information in the terminal.
     * 
     * @param ms Holds the milisecond value of how long the compiler should wait upon the method being called.
     */
    public static void waits(int ms)
    {
        try
        {
            Thread.sleep(ms);
        }
        catch(InterruptedException ex)
        {
            Thread.currentThread().interrupt();
        }
    }

}
// End class Tidy