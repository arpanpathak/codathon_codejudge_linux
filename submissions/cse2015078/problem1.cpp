#include<iostream>
#include<vector>
#include<algorithm>
#include<string.h>
#include<stdio.h>

using namespace std;

int main()
{
    int N;
    vector <char> number;
    char s[10000];
    char a[1];
    cin >> N;
    gets(a);
    for(int i=0; i<N;i++){
       gets(s);
       number.clear();
       int j=0;
       while (s[j] != '$'){
            j++;
       }
       j +=1;
       int flag=0;

       while((s[j] >='0' && s[j] <= '9' && s[j] != '\0') || s[j] ==' '){
            if(flag == 0){
                if(s[j] != '0' && s[j] != ' '){
                    flag = 1;
                   // j++;
                }
                else if (s[j] == '0' || s[j] == ' '){
                    j++;
                    continue;
                }
            }

            if(s[j] != ' '){
                    //cout << s[j]<<endl;
                number.push_back(s[j]);
            }
            j++;
       }
       cout << "$" ;
       for(int l=0;l< number.size();l++){
        cout << number[l];
       }
       if(number.size()<=0){
        cout << 0;
       }
       cout << endl;
    }
    return 0;
}
