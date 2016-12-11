#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    //printf("Hello world!\n");
    int a,t, i, d, d1,d2;
  	long long int b;
  	long long int c;
    int *ar;
    scanf("%d",&t);
    ar=(int*)malloc(t*sizeof(int));
    for(i=0;i<t;i++)
    {
        scanf("%d%ld",&a,&b);
        //c=pow(a,b);
      d=b%10;
      d1=a%10;
      d2=(a*a)%10;
       c=pow(d1,d); 
      c=c*d2;
      d=c%10;
        ar[i]=d;
    }
    for(i=0;i<t;i++)
        printf("%d\n",ar[i]);
    return 0;
}
