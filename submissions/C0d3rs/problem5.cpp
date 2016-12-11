#include <bits/stdc++.h>
#define gcd __gcd

using namespace std;

int main() {
    int t, n;
    int g;
    ios::sync_with_stdio(0);
    cin >> t;
    while (t--) {
        cin >> n;
        vector<int> v(n);
        //vector<int> a(n);
        for (int i = 0; i < n; ++i) cin >> v[i];
        g = -1;
        for (int i = 1; i < n; ++i) {
            int tmp = abs(v[i] - v[i-1]);
            if (g == -1) {
                g = tmp;
            } else {
                g = gcd(g, tmp);
            }
        }
        for (int i = 2; i <= g; ++i) {
            if (g % i == 0) cout << i << " ";
        }
        cout << "\n";
    }
    return 0;
}