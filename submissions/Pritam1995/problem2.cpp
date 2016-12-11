#include <stdio.h>
#include <stdlib.h>

int main()
{
   int n, c, i, b[50], s=0, k, p, j, q;
   int *a;
   scanf("%d",&n);
   for(j=0; j<n; j++)
   {
       // ln:
       scanf("%d%d",&c,&i);
       a=(int*)malloc(i*sizeof(int));
       for(k=0;k<i;k++)
        scanf("%d",&a[k]);
        for(k=0; k<i; k++)
       {
           for(p=0; p<i; p++)
           {
               if(p!=k && a[p]+a[k]==c)
               {
                   b[s++]=k+1;
                    b[s++]=p+1;
                  // goto ln;
                  break;
               }
               //break;
           }
           //break;
       }
       //ln:
   }
   p=0,q=0;
   for(j=0;j<s; j++)
   {

           if(j%2==0)
           {
               //printf("\n");
               p++;
               //if(p%2)
               //j=j+2;
           }
           //if(p%2==0)
           // printf("\n");
           if(p%2==0)
           {
               q++;
               if(q%2==0)
               printf("\n");
           }

        if(p%2!=0)
       printf("%d ",b[j]);

    }
}
