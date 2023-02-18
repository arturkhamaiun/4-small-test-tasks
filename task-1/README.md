## Task "Storing data to a storage"
### Background
You’re part of an engineering team working on a library. The product you're working on needs to store user information. The team has
chosen MySQL for storing the data, but there has been discussions around switching to another storage solution.

### User story
As a user I want to store user data to a data storage so that I can access it later.

### Example data
The Product Manager defined the needed user data to contain IDs (string; for example a GUID) and names (string).

ID Name
8a8e519b-8768-48d9-90c0-81569d3ded9b Matt Damon
68c68470-f25f-4ce4-bbf4-05f50bd82fc4 Johny Bravo
60bb0ca5-25d1-43bd-98e5-6a878c00a0d8 Rafael Nadal

### Requirements
Your solution must be able to 1) add new users to the storage, and 2) find a user from the storage for an ID. Please avoid using
frameworks and ORMs, such as Symfony, Laravel, Doctrine etc. It is ok to use external libraries.

### Additional information
You can assume that the required MySQL database and tables exists, there’s no need to create any of this. We’re looking for code
quality, testability, and extendability, and expect the task to be implemented in OOP with appropriate namespaces. Please bear in mind
that the team may want to use a different storage option later on – maybe they want to store this data to Redis or a text file.

We expect to see an example of how the solution is used. Example can be a simple CLI script, and it doesn’t need to accept any
parameters. There’s no need for Dockers, routing, frontend, and such, as we’re reviewing only the code; we won’t execute the code.

We’re not looking the solution to be fully tested, just add a couple of tests showing your understanding of testing.