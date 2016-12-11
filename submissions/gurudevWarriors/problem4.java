// Gifts -> Hard
//Slow I/O like Scanner input gives TLE. Dfs implementation preferred.
import java.io.*;
import java.util.*;

public class problem4 {
    public static void main(String[] args)throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        int t = Integer.parseInt(br.readLine());
        while(t-- 0) {
            int N = Integer.parseInt(br.readLine());
            int emp[] = new int[N+1];
            String line[];
            for(int i=0; i<N-1; i++) {
                line = br.readLine().split(" ");
                int s = Integer.parseInt(line[0]);
                int j = Integer.parseInt(line[1]);
                emp[j] = s;
            }
            int id = 0, gifts = 0;
            for(int i=1; i<=N; i++) {
                if(emp[i] == 0) {
                    id = i;
                    continue;
                }
                int idx = i;
                while(true) {
                    if(emp[idx] == 0)
                        break;
                    idx = emp[idx];
                    gifts++;
                }
            }
            System.out.println(id+" "+gifts);
        }
    }
}