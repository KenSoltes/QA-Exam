
## Configuration

1. Clone the repository

   ```bash
        $   git clone https://github.com/KenSoltes/QA-Exam.git
    ```
2.  For Laravel Dusk install php and composer first and open the QA-Exam repository in your IDE

3.  To install laravel dusk, enter this command

    ```bash
        $   composer require --dev laravel/dusk
    ```

4.  Install dusk binary

    ```bash
        $   php artisan dusk:install
    ```

5.  Run the local server

    ```bash
        $   php artisan serve
    ```

6.  Run front build

    ```bash
        $   npm run dev
        
    ```

7.  Run

    ```bash
        $   npm run build
    ```

8.  In your IDE go to /test/browser and you will see 3 test files, "inputTest.php","invalidtest.php", "viewPageTest.php" and run

    ```bash
        $   php artisan dusk
    ```
9. For playwright, make sure you installed nodejs 

10. Install playwright

    ```bash
        $   npm init playwright@latest
    ```
   ```bash
        $   npx playwright install --with-deps
    ```
11. In the repository, you will see e2e folder

12. Click the folder and you will see 3 test

13. Run this command in the terminal
    
    ```bash
        $   npm init playwright@latest
    ```

    ```bash
        $   npx playwright test
    ```


