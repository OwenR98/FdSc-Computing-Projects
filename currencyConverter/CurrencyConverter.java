/**
 * Basic, non internet connected currency converter
 * 
 * Date 19/07/2021
 * 
 * Author: Owen Ramsey
 */

// Import items from the java library
import javax.swing.*;       // JFrame, JLabel, JComboBox, ---- etc


public class CurrencyConverter
{   
    // Data items
    private JFrame frame;
    private JPanel mainPanel;

    public CurrencyConverter()
    {
        // Create the frame for the currency converter
        frame = new JFrame("Currency Converter");
        frame.setBounds (10,10,750,650);
        frame.setLayout(null);
        frame.setVisible(true);

        // Create the panel to go onto the frame
        mainPanel = new JPanel();
        mainPanel.setBounds (20,20,690,570);
        mainPanel.setLayout(null);
        frame.add (mainPanel);

        // Make the frame visible
        frame.setVisible(true);
    }

    public static void main(String[] args)
    {
        CurrencyConverter go = new CurrencyConverter();
    }
}



