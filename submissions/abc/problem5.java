import java.util.*;
import java.io.*;
import java.math.*;
public class problem5 {    
    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
		int t = in.nextInt();
		while(t-- > 0) {
			StringBuilder sb = new StringBuilder();
			int n = in.nextInt();
			int a[] = new int[n];
			for(int i=0; i<n; i++)
				a[i] = in.nextInt();
			Arrays.sort(a);
			int g = a[1]-a[0];
			for(int i=1; i<n-1; i++)
				g = GCD(g, a[i+1]-a[i]);
			//System.out.println(g);
			ArrayList<Integer> common = new ArrayList<Integer>(getFactors(g));
			Collections.sort(common);
			for(int i=0; i<common.size(); i++)
				sb.append(common.get(i)+" ");
			System.out.println(sb.toString().trim());
		}
    }
    public static ArrayList<Integer> getFactors(int n) {
        ArrayList<Integer> factors = new ArrayList<Integer>();
        factors.add(n);
        for(int test = n - 1; test >= Math.sqrt(n); test--) {
            if(n % test == 0) {
                if(factors.contains(test))
                    continue;
                factors.add(test);
                if(factors.contains(n/test))
                    continue;
                factors.add(n / test);
            }
        }
        return factors;
    }
    public static int GCD(int a, int b) {
        if(b==0)
            return a;
        return GCD(b, a%b);
    }
}