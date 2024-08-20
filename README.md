
## Configuration

1.  For Laravel Dusk install php and composer first and open the QA-Exam repository

2.  To install laravel dusk, enter this command

    ```bash
        $   composer require --dev laravel/dusk
    ```

3.  Install dusk binary

    ```bash
        $   php artisan dusk:install
    ```

4.  Run the local server

    ```bash
        $   php artisan serve
    ```

5.  Run front build

    ```bash
        $   npm run dev
        
    ```

6.  Run

    ```bash
        $   npm run build
    ```

7.  In your IDE go to /test/browser and you will see 3 test files, "inputTest.php","invalidtest.php", "viewPageTest.php" and run

    ```bash
        $   php artisan dusk
    ```


