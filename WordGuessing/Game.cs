using System.Diagnostics.Metrics;

namespace WordGuessing
{
    public class Game
    {
        private string[] listWord = new string[]
        {"Apple", "Amazon", "Google", "Nike", "CocaCola", "Disney", "Toyota", "McDonald's", "Samsung", "Adidas"};
        public string answerWord { get; private set; }
        public string currentWord { get; set; }
        public int maxGuess { get; set; }
        public int wrongGuess { get; set; }

        //Constructor
        public Game()
        {
            Random word = new Random();
            int ListIndex = word.Next(listWord.Length);;
            answerWord = listWord[ListIndex];
            answerWord = answerWord.ToLower();
            maxGuess = 5;
            wrongGuess = 0;
            for (int i = 0; i < answerWord.Length; i++)
            {
                currentWord += "_";
            }
        }

        public bool DidWin()
        {
            return answerWord.Equals(currentWord);
        }

        public bool DidLose()
        {
            
            return wrongGuess >= maxGuess;
        }

        public void Message()
        {
            Console.WriteLine($"\nCurrent Word: {currentWord}");
            Console.WriteLine($"Remaining Guess: {maxGuess - wrongGuess}");
        }

        public void Ask()
        {
            Console.Write("Guess a letter: ");
            string userInput = Console.ReadLine().Trim();

            if( userInput.Length != 1)
            {
                Console.WriteLine("Please input a letter at a time");
                return;
            }
            char userLetter = Convert.ToChar(userInput.ToLower());
            if( answerWord.Contains(userLetter) ) 
            {
                Console.WriteLine($"The letter {userLetter} is in the guess");
                for(int i = 0; i<answerWord.Length; i++)
                {
                    if(userLetter == answerWord[i])
                    {
                        currentWord = currentWord.Remove(i, 1).Insert(i, userLetter.ToString());
                    }
                }
            }
            else
            {
                wrongGuess++;
                Console.WriteLine($"The letter {userLetter} is not in a guess");
            }
        }
    
    }
}
