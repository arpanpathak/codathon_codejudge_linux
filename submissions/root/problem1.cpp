#include<stdio.h>
#include<stdlib.h>
#include<search.h>
int main()
{
	int test,t;
	scanf("%d",&test);
	for(t=0;t<test;t++)
	{
		unsigned long long int a,sum=0,i,base=1;
		scanf("%llu",&a);
		for(i=0;i<a;i++)
		{
			sum=sum+(base*1);
			base=base*2;
		}
		printf("%llu",sum);
	}
    
	return 0;
}
	