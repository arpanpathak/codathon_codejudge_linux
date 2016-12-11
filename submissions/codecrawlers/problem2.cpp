#include<iostream>
#include<stdio.h>
#include<vector>
#include<stdio.h>
#include<math.h>

using namespace std;

int main(){
    int T;
    unsigned long long int N,sum=0;
    scanf("%d",&T);
    for(unsigned long long int i=0; i<T;i++){
        sum = 0;
        vector<unsigned long long int> num;
        scanf("%ld",&N);
        for(unsigned long long int j=1; j<=(unsigned long long int)sqrt(N);j++){
            if(N%j == 0){
                num.push_back(j);
            }
        }
        for(unsigned long long int b=0; b<num.size();b++){
            if(num[b]!=(N/num[b])){
                sum += num[b];
            }
        }
        for(unsigned long long int a=1; a<num.size();a++){
            sum+=(N/num[a]);

        }
        if(N != 1){
           sum += N;
        }
        cout << sum<<endl;
    }
}
