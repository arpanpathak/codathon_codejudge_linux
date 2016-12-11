import java.util.ArrayList;
import java.util.Arrays;
import java.util.concurrent.*;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.StringTokenizer;

class StdIn {
	private static BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	private static StringTokenizer tok = null;

	public static String gets() {
		try {
			if (tok == null || !tok.hasMoreTokens()) {
				tok = new StringTokenizer(br.readLine());
			}
			return tok.nextToken();
		} catch (Exception e) {
			return null;
		}
	}

	public static long getLong() {
		try {
			return Long.parseLong(gets());
		} catch (Exception e) {
			return Long.MIN_VALUE;
		}
	}

	public static double getDouble() {
		try {
			return Double.parseDouble(gets());
		} catch (Exception e) {
			return Double.NEGATIVE_INFINITY;
		}
	}

	public static String getLine() {
		String tmp = "";
		try {
			if (tok == null || !tok.hasMoreTokens())
				return br.readLine();
			while (tok.hasMoreTokens()) {
				tmp += tok.nextToken() + " ";
			}
			return tmp;
		} catch (Exception e) {
			return null;
		}
	}
}

public class problem2 {
	public static void main(String[] args) {
		int t = (int) StdIn.getLong();
		final long SIZE = 1000000000000L;
		ArrayList<Boolean> primes = new ArrayList<>();
		for (long i = 0; i < SIZE; ++i)
			primes.add(true);
		primes.set(0, false);
		primes.set(1, false);
		for (long i = 2; i*i < SIZE; ++i) {
			if (primes.get((int)i)) {
				for (long j = i; j < SIZE; j += i) {
					primes.set((int)j, false);
				}
			}
		}
		ArrayList<Long> p = new ArrayList<>();
		for (long i = 2; i < SIZE; ++i) {
			if (primes.get((int) i)) {
				p.add(i);
			}
		}
		while (t-- > 0) {
			long n = StdIn.getLong();
			long s = 0;
			for (long i : p) {
				long cnt = 0;
				long m = n;
				while (m % i == 0) {
					++cnt;
					m /= i;
				}
				s += ((long) Math.pow(i, cnt+1) - 1) / (i - 1);
			}
			System.out.println(s);
		}
	}
}