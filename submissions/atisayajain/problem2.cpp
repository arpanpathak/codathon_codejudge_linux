#include<stdio.h>


void cmp(int c, int item, int rate[])
{
    int i1, i2, sum = 0;
    int in1, in2;
    printf("%d\n", c);
    for(i1 = 0; i1<item; i1++)
    {
        for(i2=i1+1; i2<item; i2++)
        {
            sum = rate[i1]+rate[i2];
            if(sum == c)
                break;
        }
        if (sum == c)
            break;
    }
    printf("%d, %d", i1+1, i2+1);
}

int main()
{
    int i, j, N, C, I, P[2000];
    scanf("%d", &N);
    for(i=0; i<N; i++)
    {
        printf("\nCredit: \n");
        scanf("%d", &C);
        if(C<5)
            break;
        printf("Items: \n");
        scanf("%d", &I);
        if(I<3)
            break;
        for(j=0; j<I; j++)
        {
            scanf("%d", &P[j]);
            if (P[j]<1)
                break;
        }
        cmp(C, I, P);
    }
}

