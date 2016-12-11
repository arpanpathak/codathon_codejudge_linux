#include<stdio.h>
#include<math.h>
#include<stdint.h>
int main()
{
    uint64_t num;
    int T, i, j;
    scanf("%d", &T);
    int K[100];
    for(i=0; i<T; i++)
    {
        scanf("%d", &K[i]);
        num = 1;
        if(K[i]==0)
            printf("0");
        else
        {
            for( j=0; j<K[i]; j++)
                num *= 2;
            printf("%d", num-1);
        }
        print("\n");
    }
}

