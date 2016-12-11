#include <stdio.h>
#include <stdlib.h>

int main()
{
    int x,y,z,N,i,j;
    x=0;
    y=0;
    z=1;
    scanf("%d",&i);
    while(i>0)
    {
        scanf("%d",&N);
        j=N%5;
        switch(j)
        {
            case 1: x=x+1;
                    break;
            case 2: y=y+2;
                    break;
            case 3: x=x-3;
                    break;
            case 4: y=y-4;
                    break;
            case 5: x=x+5;
                    break;
        }
        i--;
        printf("%d %d",x,y);
    }
    return 0 ;
}