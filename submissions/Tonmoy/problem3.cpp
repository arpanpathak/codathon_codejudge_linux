#include <iostream>
#include<stdio.h>
#include<stdlib.h>
#include<math.h>

using namespace std;

int main()
{
    int a,n,d;
  	int* ans;
    long long int b;
  	long long int c;
   	scanf("%d",&n);
    ans=(int*)malloc(n*sizeof(int));
    for(int i=0;i<n;i++)
    {
        scanf("%d %ld",&a,&b);
      	c=a^b;
        d=c%10;
        ans[i]=d;
    }
    for(int i=0;i<n;i++)
    {
        printf("%d\n",ans[i]);
    }
    return 0;
}
