# mastering_magento2
This is a repository that contains chapters practice code following the Mastering and Test Magento 2 course on Udemy https://www.udemy.com/learning-path-magento-master-and-test-magento-2-with-ease/learn/v4/overview.

This README contains noteworthy tips, tricks, and solutions to common problems that I've encounter during the course.

### Tips:
+ When using Factory classes dependency injection, remember to run `setup:di:compile` to generate Factory classes code. Otherwise, errors will occur because Factory classes used in your custom module code will not be found. Run `cache:flush` to clear cache before refreshing the browser.
