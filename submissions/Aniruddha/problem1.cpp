
#include<stdio.h>

int main()
{
	long int test,t,i;
	scanf("%ld",&test);
	for(t=0;t<test;t++)
	{
		long int x=0,n;
		scanf("%ld",&n);
		for(i=1;i<=n;i++)
		{
			if(n%i==0)
			x=x+i;
		}
		printf("%ld\n",x);
	}
	return 0;
}