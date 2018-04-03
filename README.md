## mastering_magento2
This is a repository that contains chapters practice code following the Mastering and Test Magento 2 course on Udemy https://www.udemy.com/learning-path-magento-master-and-test-magento-2-with-ease/learn/v4/overview.

This README contains noteworthy tips, tricks, and solutions to common problems that I've encounter during the course.

#### Tips:
+ When using Factory classes dependency injection, remember to run `setup:di:compile` to generate Factory classes code. Otherwise, errors will occur because Factory classes used in your custom module code will not be found. Run `cache:flush` to clear cache before refreshing the browser.
    - For example, If we have a model under `Mastering\SampleModule\Item` and we reference `ItemFactory` somewhere in our code, then `setup:di:compile` will automatically generate our `ItemFactory` inside `<magento_root_dir>\generated\Mastering\SampleModule`.
+ When defining a route, the url in the browser should be as follow: `frontName_controller_action`:

    - `frontName` is the unique  url we defined for our module.
    - `controller` name of the controller in our `Module_Name\Controller` directory.
    - `action` action defined in `controller` file.
    - For example, if we have `<route ... frontName="mastering">...</route>` defined in our `Mastering\SampleModule\etc\frontend\routes.xml`, and we have `Index.php` controller defined in `Mastering\SampleModule\Controller\Index.php`, and `Index` action defined in `Index.php` controller, our url should be: `magento_domain.com\mastering\Index\Index`. Note: By default `Index` controller and `Index` action is appended after `frontName` by default in the url, so we don't have to add `Index\Index` in the url and it would still work. Basically, `magento_domain.com\mastering\Index\Index` = `magento_domain.com\mastering`
+ When working 
