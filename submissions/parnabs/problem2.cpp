#include <iostream>
using namespace std;

void run(int*x,int*y,int turn);

int main() {
    int t,n ,temp,mod,x = 0 , y = 0;
    cin >> t;
    while (t--) {
        cin >> n;
        temp = n / 4;
        mod = n % 4;
        x = -2 * temp;
        y = -2 * temp;

        if( mod >= 1)
            x = x + (temp * 4 + 1);
        if( mod >= 2)
            y = y + (temp * 4 + 2);
        if( mod ==3 )
            x = x - (temp * 4 + 3 );
        cout << x << " " << y << endl;
    }

}

