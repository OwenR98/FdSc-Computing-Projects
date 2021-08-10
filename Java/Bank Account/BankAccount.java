/**
 * The BankAccount class is an abstract superclass for the checkingAccount and savingsAccount classes.
 * 
 * @Author Owen Ramsey
 * @Version 1.0
 */

public abstract class BankAccount
{
    protected String accountNo = "";
    protected String custName = "";
    protected double balance = 0;


    /**
     * This method will display the account type whether that be checking or saving.
     */
    public abstract void printAccountType();
  
    /** 
     * This method allows for a double to be passed into it which will change the balance
     * to whatever is passed through.
     * 
     * @param balance Holds a double value to be translated to the global variable 'balance'.
     */
    public void setBalance(double balance)
    {   
        if (balance < 0)
        {
            System.out.println("You cannot create an account with a negative balance, your balance has been set to £0");
            balance = 0;
        }

        this.balance = balance;
    }

    /**
     * This method converts the balance into a String so it can be displayed, whilst also using conditional logic
     * to check if balance is below 0, and if it is displaying that they are overdrawn.
     */
    public void getBalanceStr()
    {
        String BalanceString = String.valueOf(balance);
        System.out.println("Your current balance is: £" + String.valueOf(BalanceString)); 
        if (balance < 0)
        {
            System.out.println(custName + " You are now overdrawn");
        }
    }

    /**
     * This method allows the user to pass through the double, the method will display a thank you to the user
     * and then add the value of the deposit to the balance and update the balance variable. The method also contains
     * additional logic to prevent the user entering 0 or a negative number as a deposit figure.
     * 
     * @param deposit Holds the double variable of the deposit the user wishes to add to their balance.
     */
    public void deposit(double deposit)
    {   
        if (deposit < 1)
        {
            System.out.println("You cannot deposit less than £1");
        }
        else
        {
        System.out.println("Thanks, your deposit of £" + deposit + " has been accepted");
        balance = balance + deposit;
        }
    }

    /**
     * This method allows for the user to pass the double through the method, the method will then thank
     * the user and take away the withdraw amount from the balance and update the balance variable. the method also
     * uses conditional logic to exception handle if the user attempts to use an un-suitable number.
     * 
     * @param withdraw Holds the double variable to be taken away from the balance, this is manipulated by user input.
     */
    public void withdraw(double withdraw)
    {
        if (withdraw < 1)
        {
            System.out.println("You cannot withdraw this amount, please try another amount");
        }
        else
        {
            System.out.println("We have successfully removed your requested funds of £" + withdraw);
            balance = balance - withdraw;
        }
    }

}
// End class BankAccount