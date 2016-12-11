#include <bits/stdc++.h>
#define letter(x) ((x >= 65 && x <= 90) || (x >= 97 && x <= 122))
using namespace std;

int main() {
    ios::sync_with_stdio(0);
    int t;
    cin >> t;
    while (t--) {
        int c;
        int n;
        cin >> c >> n;
        vector<int> v(n);
        for (int i = 0; i < n; ++i) {
            cin >> v[i];
        }
        for (int i = 0; i < n; i++) {
            for (int j = i+1; j < n; ++j) {
                if (v[i] + v[j] == c) {
                    cout << i+1 << " " << j+1 << "\n";
                    break;
                }
            }
        }
    }
    return 0;
}