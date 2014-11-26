package sortingAlgs;

import java.util.*;
public class Sorting {

	//InsertionSort
	public static int[] insertionSort(int[] A){
		for(int i = 1; i < A.length; i++){
			int k = i-1;
			int j = i;
			while(k >= 0){
				if(A[j] < A[k]){
					int temp = A[k];
					A[k] = A[j];
					A[j] = temp;
					j = k;
					k--;
				}
				else{
					break;
				}
			}
		}
		return A;
	}

	//SelectionSort
	public static int[] selectionSort(int[] A){
		for(int i = 0; i < A.length; i++){
			if(i+1 == A.length){
				break;
			}
			int k = i;
			for(int j = i+1; j < A.length; j++){
				if(A[j] < A[k]){
					k = j;
				}
			}
			int temp = A[i];
			A[i] = A[k];
			A[k] = temp;
		}
		return A;
	}

	//BubbleSort
	List<String> l = new ArrayList<String>();
	public static int[] bubbleSort(int[] A){
		boolean swapped = false;
		do{
			swapped = false;
			for(int i = 1; i < A.length; i++){
				if(A[i] < A[i-1]){
					int temp = A[i];
					A[i] = A[i-1];
					A[i-1] = temp;
					swapped = true;
				}
			}
		}while(swapped);
		return A;
	}

	//QuickSort
	public static int[] quickSort(int[] A){
		//Random r = new Random();
		//int index = r.nextInt(A.length);
		int index = A.length/2;
		int low = 0;
		int high = A.length-1;
		while(low < high){
			while((low < index) && (A[low] < A[index])){
				low++;
			}
			while((high > index) && (A[high] > A[index])){
				high--;
			}
			if(A[high] < A[low]){
				int temp = A[low];
				A[low] = A[high];
				A[high] = temp;
				low = 0;
			}
		}
		if(A.length > 2){
			int[] left = Arrays.copyOfRange(A, 0, A.length/2);
			int[] right = Arrays.copyOfRange(A, A.length/2, A.length);
			left = quickSort(left);
			right = quickSort(right);
			int[] combine = new int[left.length + right.length];
			System.arraycopy(left, 0, combine, 0, left.length);
			System.arraycopy(right, 0, combine, left.length, right.length);
			A = combine;
		}
		return A;
	}
	
	//MergeSort
	public static int[] mergeSort(int[] A){
		if(A.length > 2){
			int[] left = Arrays.copyOfRange(A, 0, A.length/2);
			int[] right = Arrays.copyOfRange(A, A.length/2, A.length);
			left = mergeSort(left);
			right = mergeSort(right);
			A = merge(left, right);
		}
		else if(A.length == 2){
			if(A[0] > A[1]){
				int temp = A[0];
				A[0] = A[1];
				A[1] = temp;
			}
		}
		return A;
	}
	//merge arrays
	public static int[] merge(int[] left, int[] right){
		int[] A = new int[left.length + right.length];
		int index = 0;
		int r = 0;
		int l = 0;
		while((l < left.length) && (r < right.length)){
			if(left[l] < right[r]){
				A[index] = left[l];
				l++;
				index++;
			}
			else{
				A[index] = right[r];
				r++;
				index++;
			}
		}
		//put remainder of left half into A
		while(l < left.length){
			A[index] = left[l];
			l++;
			index++;
		}
		//put remainder of right half into A
		while(r < right.length){
			A[index] = right[r];
			r++;
			index++;
		}
		return A;
	}
}