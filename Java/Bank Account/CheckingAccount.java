/**
 * The CheckingAccount class is a subclass of bankAccount which contains methods that are unique to a checkingAccount
 * object and differ from a savingsAccount.
 * 
 * @Author Owen Ramsey
 * @Version 1.0
 */

public class CheckingAccount extends BankAccount
{
    /**
     * This constructor method allows the user to pass through Strings to create
     * a checkingAccount object. It also contains an conditional logic which checks that the account number
     * only consists of numbers and not letters and checks that the customer name contains only characters.
     * 
     * @param accountNo The account number for the bank account
     * @param custName  The customer name who owns the bank account
     */
    public CheckingAccount(String accountNo, String custName)
    {
        this.custName = custName;

        if (accountNo.matches("[0-9]+") == false)
        {
            System.out.println("this account number cannot contain letters, only numbers!");
            Tidy.waits(3000);
            System.exit(0);
        }

        if (custName.matches("[a-zA-Z]+") == false)
        {
            System.out.println("Your name cannot contain anything but characters!");
            Tidy.waits(3000);
            System.exit(0);
        }


    
    }

    /**
     * This method is a user personal  version of the astract method set in the superclass.
     * 
     * @see printAccountType in bankAccount
     */
    public void printAccountType()
    {   
        System.out.println(custName.toUpperCase() +"S CHECKING ACCOUNT");
    }

}
// End class CheckingAccount
