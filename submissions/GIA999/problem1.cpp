

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.math.BigInteger;

public class problem1 {
	static BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
	public static void main(String[]args)throws Exception{
		int t=(int)getInt();
		for(int i=0;i<t;i++){
			int n=(int)getInt();
			BigInteger b=new BigInteger("2");
			System.out.println(b.pow(n).subtract(BigInteger.ONE));
		}
		
		
		
	}
	static long getInt() throws Exception{
		return Long.parseLong(br.readLine());
		
	}
	static int [] getIntArr()throws Exception{
		String s[]=br.readLine().split(" ");
		int arr[]=new int[s.length];
		for(int i=0;i<s.length;i++){
			arr[i]=Integer.parseInt(s[i]);
		}
		return arr;
	}
	static long [] getLongArr()throws Exception{
		String s[]=br.readLine().split(" ");
		long arr[]=new long[s.length];
		for(int i=0;i<s.length;i++){
			arr[i]=Long.parseLong(s[i]);
		}
		return arr;
	}

}
