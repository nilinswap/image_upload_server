#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>
#include <wait.h>
int main(){
	pid_t pid;
	pid=fork();
	pid_t gpid=getpid();
	if(pid<0)
		printf("fork did not shit");
	if(pid==0)
	{	
		char *parmList[] = {"chromium-browser", "www.google.com", NULL};
		
		execvp("/usr/bin/chromium-browser", parmList);
		return 1;
	
	}
	else
	{	int status;
		pid_t wpid;
		//printf("%d\n",status);
		
		//wpid =wait(&status);
		sleep(1);
		char *parmList[] = { "a.out",NULL};
		execvp("/home/swapnil/Desktop/os/a.out",parmList);
		
		
    
	}
	return 0;
}
