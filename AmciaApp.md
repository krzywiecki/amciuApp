
**Meal ordering coordination system**

This is description of tasks that are used in our evaluation process. We wanted to create an opportunity for you to show us your skills and work style, but also to present knowledge and familiarity of tools and technology - both of HTML markup with CSS stylesheets, and Javascript frameworks.

Beside fulfilling project tasks you can also present your abilities in terms of:

- versions systems - our team works with Git (for our projects we use GitHub) - in this case provide the URL for repository containing your source code
- code preprocessors (Sass, Less, etc)
- HTML templating languages (HAML, Slim, Pug [formerly Jade] etc)
- other tools you use and want to show us

For this purpose, the resulting source code should be available for us to review (not only compiled code, but all sources too).

Whenever task description or provided pictures does not provide enough information about any aspect of implementation, we dare you to spot it, describe and make a decision on your own (with additional reasoning for chosen approach). If you don't feel competent enough, you can always ask us about details.

Provided views pictures: https://www.dropbox.com/s/um8l0nof4thvjv6/FE%20Recruitment%20AmciaApp.zip?dl=0


We'd like you to write an application that coordinates meal ordering for Monterail employees.
Every day, circa 12:00AM, we decide where do we order our meal from and gather orders on Slack.
It's ineffective and sometimes orders are lost; that's why we would like to have an application to coordinate the process for us.

Features

1. **Creating new order:**
Any user can start new order by providing name of the restaurant we order from.

2. **Adding meal to order:**
Any user can add meal to started order by providing meal's name and price.
Only one item per user in order.

3. **Changing order's status:**
It should be possible to change order's status:

  - Finalized - no more items can be added
  - Ordered
  - Delivered

4. **Viewing lists of all orders:**
It should be possible to see two lists of orders:

  - Active - ordering is still in progress
  - History - finalized and archived orders

5. **Authentication (optional):**
Log in to application using OAuth (Facebook or GitHub).


*Disclaimer: Persistence*

Add way to store application data - You can write back-end with API endpoints, use an external service to store data (like Firebase), keep orders on local storage - or if any of those is beyond your skills and knowledge - at least try to build mock-up of API service. What is important about storage is not which method you choose, but how it will be included in architecture of application.

Constraints
  - Application needs to be SPA (Single Page Application)
  - There are no restrictions on JavaScript framework choice (Vue/React/Angular2 would make us super happy)
  - Tests are obligatory, high coverage is desired

Good luck!
