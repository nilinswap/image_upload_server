#include <stdio.h>
#include <linux/kernel.h>
#include <sys/syscall.h>
#include <unistd.h>
int main(){
	long int s=syscall(384);
	printf("System call .: sys_helloworld:.returned %ld \n",s);
	return 0;
}
