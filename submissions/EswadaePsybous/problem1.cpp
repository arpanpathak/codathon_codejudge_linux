#include <stdio.h>
#include <stdlib.h>

int main()
{
    int i,j,n,sum;
    scanf("%d",&i);
    for(;i>0;i--)
    {
        scanf("%d",&n);
        sum=n;
        for(j=1;j<n;j++)
            if(n%j==0)
            sum=sum+j;
        printf("%d",sum);
    }
    return 0;
}
