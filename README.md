# kish

This is a php framework, I've been planning to build since 2020. I do not think I will finish it, but, lets put these thoughts down.

## preamble

Firstly, it is  inspired by the complexcity of routing I have seen from, if not all, frameworks (php and javascript specifically).  So, this is going to be at least a proof of concept, the rest of the other components of a framework have done and dusted by others, which I do respect, especially, laravel.

So, the crux of the matter is that I do believe routing is fundamental to the business logic of an application, as I'd borrow some SOLID design concepts to explain this. I call it **domain specific routing***.

## domain specific routing

This means, each domain of the appplication's business logic handles its own routing. It is similar to how ACL (access control list) works, but, in this case, it is about routing. Here are the imagined steps:

1. the entry domain will receive the request, and handover the routing to a domain;
2. that domain will process the request, and return a view or handover to another domain;
3. step two (2) repeats a until a response is returned;
4. the response is rendered, and the process is complete.

Something to that effect, it sounds like trash right now, but, this is the first time I've even written this stuff out.

## contribution

If you want to contribute let me know, but these are just early days, but hey, shoot your short. I am open to collaboration; I haven't even decided how that will work.

el. oh. el.
