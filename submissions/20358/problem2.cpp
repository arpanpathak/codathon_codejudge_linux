#include<stdio.h>
 int main()
 {int N,i=1,p,m=0;
int a[i][2];
      scanf("%d",&N);
    int  x=0,y=0;
      while(i<=N)
      {
                 scanf("%d",&p);
                 if(i==1)
                 x=x+p;
                 else if(i==2)
                 y=y+p;
                 else if(i==3)
              x=x-p;
                 else
           y=y-p;
                 a[0][m]=x;
                 a[1][m]=y;
                 i++;
                 m++;
                 }

for(i=0;i<N;i++)
    printf("%d %d\n",a[0][i],a[1][i]);
                 return 0;
                 }