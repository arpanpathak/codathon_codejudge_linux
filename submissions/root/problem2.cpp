#include<stdio.h>
int main()
{
    int a,test,t;
    scanf("%d",&test);
    for(t=0;t<test;t++)
    {
        scanf("%d",&a);
        if(a==1)
            printf("1");
        else printf("0");
    }
    return 0;
    }
