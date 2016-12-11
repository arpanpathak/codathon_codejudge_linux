#include <iostream>
#include <stdio.h>
#include <string.h>
using namespace std;

int i,j, f=0, n, d=0;
char s[1000][100];

int main()
{

    cin>>n;
    for(j=0; j<n; j++){
        gets(s[j]);
    }
    for(j=0; j<n; j++){
        for(i=0 && f !=2 ; i < strlen(s[j]); i++ ){
            if(s[j][i]== '$'){
                cout<<"$";
                f=1;
            }
            if(f == 1 && s[j][i] != '$')
            {
                if(s[j][i] == ' ') continue;
                else if(s[j][i] == '0' && d == 0) continue;
                else if(s[j][i] == '0' && i == strlen(s[j])) cout<<0;
                else if(isalpha(s[j][i])){
                        if(d == 0) cout<<0;
                    f=2; // break
                }
                else{
                    cout<<s[j][i];
                    d=1;
                }
            }
        }
        cout<<endl;
        f=0;
        d=0;
    }
    return 0;
}
