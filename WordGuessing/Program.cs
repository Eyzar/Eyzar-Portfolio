using System;

namespace WordGuessing
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Welcome to the Word Guessing Game\nYou have 5 chance to guess a letter\nReady To Play the game? (y/n)");
            string play = Console.ReadLine();
            if( play.ToLower() == "y")
            {
                Game a = new Game();
                do
                {
                    a.Message();
                    a.Ask();

                    if (a.DidWin())
                    {
                        Console.WriteLine($"You won the game, Congratulations");
                        break;
                    }else if (a.DidLose())
                    {
                        Console.WriteLine("Try Again next time");
                        break;
                    }

                }while(true);



            }else if( play.ToLower() == "n")
            {
                Console.WriteLine("See you in another time...");
                
            }
            
        }
    }
}