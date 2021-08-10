/**
 * The SavingsAccount class is a subclass of bankAccount which contains methods that are unique to a SavingsAccount
 * object and differ from a CheckingAccount.
 * 
 * @Author Owen Ramsey
 * @Version 1.0
 */

public class SavingsAccount extends BankAccount 
{
    private double savingsInterest = 0.01;

    /**
     * This constructor method allows the user to pass through Strings to createa savingsAccount object. 
     * It also contains an conditional logic which checks that the account number
     * only consists of numbers and not letters and checks that the customer name contains only characters.
     * 
     * @param accountNo The account number for the bank account
     * @param custName  The customer name who owns the bank account
     */
    public SavingsAccount(String accountNo, String custName)
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
        System.out.println(custName.toUpperCase() +"S SAVINGS ACCOUNT");
    }

    /**
     * This method calculates the interest for the month earned on the account, and then adds it to the balance and displays
     * this to the user.
     */
    public void addInterest()
    {
        balance = balance + (balance * savingsInterest);
        System.out.println("With an interest rate of " + savingsInterest * 100 + "% your new balance for the month is: £" + String.valueOf(balance));
    }

    /**
     * This method overrides the withdraw method from bankAccount. This method adds some conditional logic
     * because in the brief it is specified that savings account cannot go into an overdraft, so this additional logic prevents
     * the account balance from going below 0.
     * 
     * @see withdraw in bankAccount.
     */
    @Override
    public void withdraw(double withdraw)
    {
        if (withdraw < 1)
        {
            System.out.println("You cannot withdraw this amount, please try another amount");
        }
        else if ((balance - withdraw) >= 0)
        {
            System.out.println("We have successfully removed your requested funds of £" + withdraw);
            balance = balance - withdraw;
        }
        else
        {
            System.out.println("You cannot withdraw £" + withdraw + " as you have insufficient funds");
        }

    }


}
// End class SavingsAccount
