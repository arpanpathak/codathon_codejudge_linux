// Byteland -> Medium
import java.io.*;
import java.util.*;

public class problem3 {
    public static void main(String[] args)throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		int t = Integer.parseInt(br.readLine());
		while(t-- > 0) {
			String s[] = br.readLine().split(" ");
			int n = Integer.parseInt(s[0]);
			int m = Integer.parseInt(s[1]);
			s = br.readLine().split(" ");
			int a[] = new int[m];
			for(int i=0; i<m; i++)
				a[i] = Integer.parseInt(s[i]);
			int dist[] = new int[n];
			int maxDist = -1;
			for(int i=0; i<n; i++) {
				dist[i] = Integer.MAX_VALUE;
				for(int j=0; j<m; j++) {
					dist[i] = Math.min(dist[i], Math.abs(a[j]-i));
				}
				maxDist = Math.max(maxDist, dist[i]);
			}
			System.out.println(maxDist);
		}
    }
}