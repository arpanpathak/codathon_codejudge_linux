#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>


int main()
{

    int N = 0;

    scanf("%d", &N);

    if(N < 1 || N > 500500)
    {
        printf("Error");
        
    }
    char* Si[10000];
    int i = 0, j = 0;
    int len;
    char* line;
  	line = calloc(1,10000*sizeof(char));
    int x=0, b=0;
    bool start = false;

    char value[100];

    for(i = 0; i < N; i++)
    {
        scanf("%s", Si);

        len = strlen(Si);

        while ( j < len )
        {
            if(Si[j] == '$' )
            {
                start = true;
                j++;

            }
            if(Si[j] == ' ')
                j++;

            if(Si[j] >= '0' && Si[j] <= '9' && (start == true))
            {
                value[x] = Si[j];
                j++;
                x++;
            }
        }
        line[i] = (string) value;


    }
    for(b = 0; b < N; b++)
    printf("$%s", line[b]);


    getch();
    return 0;
}

    return 0;
}
