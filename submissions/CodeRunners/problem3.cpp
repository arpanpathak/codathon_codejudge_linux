#include <iostream>

using namespace std;
int prod(int);
int main()
{
    long int t, n[1000], c;
    cin>>t;
    for(int i=0; i<t; i++){
        cin>>n[i];
    }
    for(int k=0; k<=t; k++){
        c = 1;
        for(int i = 1; c != n[k]; i++){
            if( prod(i) == 1 ){
                c++;
                if(c == n[k]){
                    cout<<i<<"\n";
                    break;
                }
            }
        }
    }

    return 0;
}
int prod(int a)
{
    int fact[50], tmp, f=0;
    tmp = a;
    int i=0;
    while(a){
        fact[i] = a%10;
        a/=10;
        i++;
    }

    for(int j=i; j>0; j--){
        for(int k=j-2; k>=0; k--){
            fact[i] = (fact[j]*10)+fact[k];
            fact[i] = (fact[j-1]*10) + fact[k];
            i++;
        }
    }

    for(int j=0; j<i; j++){
        if(fact[j] == tmp){
            f=1;
        }
    }
    if(f==0){
        fact[i] = tmp;
        i++;
    }
    int sum = 0;
    for(int j=0; j<i; j++){
        int pro = 1;
        int d = fact[j];
        while(d){
            int tmp = d%10;
            pro *= tmp;
            d/=10;
        }
        sum+=pro;
    }
    if(sum%2 == 0){
        return 1;
    }else{
        return 0;
    }
}
