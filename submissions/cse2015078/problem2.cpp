#include<iostream>
#include<vector>
#include<algorithm>

using namespace std;

int main()
{
    int N,C,I;
    cin >> N;
    int cnt = 1;
    for(int i=0; i<N;i++){
        cin >> C;
        cin >> I;
        vector <int> list;
        for(int j=0;j<I;j++){
            int a;
            cin >>a;
            list.push_back(a);
        }
        int flag = 0,l = 0,k=1;

        int se = list.size();
        while((l < se)&&flag == 0){
            while((l+k < se)&&flag == 0){
                    //cout <<"I ran " <<(l)<<endl;
                if(list[l]+list[l+k] == C){
                    //cout << "Case #"<<cnt<<":";
                    cnt++;
                    cout << (l+1) << " "<< (l+k+1) <<endl;
                    flag = 1;
                } else {
                    k++;
                }
            }
            l++;
            k = 1;
        }
        if(cnt == 1){
            cout <<"NA"<<endl;
        }
    }
    return 0;
}
