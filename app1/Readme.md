The image of this application is published to **Docker Hub**. It is availble for pull as **shekeriev/dofexam-app1:20210918**

Of course, you may use the **Dockerfile** to build your own version.

No matter what you will choose, keep in mind that in order to start the application, you must initialize and pass the **APP_VARIABLE** environment variable to the container. 

For example:
**docker container run -d --name app1 --publish 8080:80 --env APP_VARIABLE='Bat Mitko' shekeriev/dofexam-app1:20210918**
